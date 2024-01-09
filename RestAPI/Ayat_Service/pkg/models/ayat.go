package models

import (
	// "time"

	"github.com/jinzhu/gorm"
	"github.com/rianshp/ayat-service/pkg/config"
)

var db_ayat *gorm.DB

type Ayat struct {
	ID        uint
	IDAlkitab uint
	Deskripsi *string
	Tanggal   string
}

func (Ayat) TableName() string {
	return "ayat"
}

func init() {
	config.Connect()
	db_ayat = config.GetDB()
	db_ayat.AutoMigrate(&Ayat{})
}

func CreateAyat(ayat *Ayat) error {
	err := db_ayat.Create(ayat).Error
	if err != nil {
		return err
	}
	return nil
}

func GetAyatByID(ayatID uint) (Ayat, error) {
	var ayat Ayat
	err := db_ayat.First(&ayat, ayatID).Error
	return ayat, err
}

func GetAllAyat() ([]Ayat, error) {
	var ayats []Ayat
	err := db_ayat.Find(&ayats).Error
	return ayats, err
}

func UpdateAyat(ayat *Ayat) error {
	err := db_ayat.Save(ayat).Error
	if err != nil {
		return err
	}
	return nil
}

func DeleteAyat(ayatID uint) error {
	return db_ayat.Delete(&Ayat{}, ayatID).Error
}
