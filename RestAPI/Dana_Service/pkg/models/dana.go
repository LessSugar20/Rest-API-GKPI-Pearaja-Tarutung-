package models

import (
	"fmt"

	"github.com/jinzhu/gorm"
	"github.com/rianshp/dana-service/pkg/config"
)

var db_dana *gorm.DB

type Dana struct {
	gorm.Model
	Keterangan string  `gorm:"not null" json:"keterangan"`
	Deskripsi  string  `gorm:"not null" json:"deskripsi"`
	Tanggal    string  `gorm:"not null" json:"tanggal"`
	Kategori   string  `gorm:"not null" json:"kategori"`
	Nominal    float64 `gorm:"not null" json:"nominal"`
}

func (Dana) TableName() string {
	return "dana"
}

func init() {
	config.Connect()
	db_dana = config.GetDB()
	// Auto migrate the Dana model
	db_dana.AutoMigrate(&Dana{})
}

func CreateDana(dana *Dana) error {
	err := db_dana.Create(dana).Error
	if err != nil {
		return fmt.Errorf("failed to create dana: %v", err)
	}
	return nil
}

func GetAllDana() ([]Dana, error) {
	var danas []Dana
	err := db_dana.Find(&danas).Error
	return danas, err
}

func GetDanaByID(danaID uint) (Dana, error) {
	var dana Dana
	err := db_dana.First(&dana, danaID).Error
	return dana, err
}

func UpdateDana(dana *Dana) error {
	err := db_dana.Save(dana).Error
	if err != nil {
		return fmt.Errorf("failed to update dana: %v", err)
	}
	return nil
}

func DeleteDana(danaID uint) error {
	return db_dana.Where("id = ?", danaID).Delete(Dana{}).Error
}
