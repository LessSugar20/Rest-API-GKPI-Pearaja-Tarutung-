package models

import (
	"fmt"

	"github.com/jinzhu/gorm"
	"github.com/rianshp/service-user/pkg/config"
	"golang.org/x/crypto/bcrypt"
)

var db_user *gorm.DB
type User struct {
	gorm.Model
	Username string
	Fullname string
	Password string
	Status   string
}
func init() {
	config.Connect()
	db_user = config.GetDB()
	db_user.AutoMigrate(&User{})
}

func CreateUser(user *User) error {
	hashedPassword, err := bcrypt.GenerateFromPassword([]byte(user.Password), bcrypt.DefaultCost)
	if err != nil {
		return fmt.Errorf("failed to hash password: %v", err)
	}

	user.Password = string(hashedPassword)

	err = db_user.Create(user).Error
	if err != nil {
		return fmt.Errorf("failed to create user: %v", err)
	}
	return nil
}


func GetAllUsers() ([]User, error) {
	var users []User
	err := db_user.Find(&users).Error
	return users, err
}


func DeleteUser(userID uint) error {
	return db_user.Where("id = ?", userID).Delete(User{}).Error
}


func GetUserByID(userID uint) (User, error) {
	var user User
	err := db_user.Where("id = ?", userID).First(&user).Error
	return user, err
}

func UpdateUser(user *User) error {
	err := db_user.Save(user).Error
	if err != nil {
		return fmt.Errorf("failed to update user: %v", err)
	}
	return nil
}