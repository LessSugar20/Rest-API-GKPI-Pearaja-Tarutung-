package models

import (
	"fmt"

	"github.com/jinzhu/gorm"
	"github.com/rianshp/userjemaat-service/pkg/config"
)

var dbUserJemaat *gorm.DB

type UserJemaat struct {
	gorm.Model
	NoInduk      string `gorm:"not null" json:"no_induk"`
	Nama         string `gorm:"not null" json:"nama"`
	Status       string `gorm:"not null" json:"status"`
	TempatLahir  string `gorm:"not null" json:"tempat_lahir"`
	TanggalLahir string `gorm:"not null" json:"tgl_lahir"`
	Baptis       string `json:"baptis"`
	Sidi         *string `json:"sidi"`
	Nikah        *string `json:"nikah"`
	PindahTanggal *string `json:"pindah_tgl"`
	Meninggal    *string `json:"meninggal"`
}
func (UserJemaat) TableName() string {
	return "user_jemaat"
 }
func init() {
	config.Connect()
	dbUserJemaat = config.GetDB()
	dbUserJemaat.AutoMigrate(&UserJemaat{})

}

func CreateUserJemaat(userJemaat *UserJemaat) error {
	err := dbUserJemaat.Create(userJemaat).Error
	if err != nil {
		return fmt.Errorf("failed to create user jemaat: %v", err)
	}
	return nil
}

func GetAllUserJemaat() ([]UserJemaat, error) {
	var userJemaats []UserJemaat
	err := dbUserJemaat.Find(&userJemaats).Error
	return userJemaats, err
}

func GetUserJemaatByID(id uint) (UserJemaat, error) {
	var userJemaat UserJemaat
	err := dbUserJemaat.First(&userJemaat, id).Error
	return userJemaat, err
}

func UpdateUserJemaat(userJemaat *UserJemaat) error {
	err := dbUserJemaat.Save(userJemaat).Error
	if err != nil {
		return fmt.Errorf("failed to update user jemaat: %v", err)
	}
	return nil
}

func DeleteUserJemaat(id uint) error {
	return dbUserJemaat.Delete(&UserJemaat{}, id).Error
}
