package models

import (
	"fmt"

	"github.com/jinzhu/gorm"
	"github.com/rianshp/sektor-service/pkg/config"
)

var db_sektor *gorm.DB

type Sektor struct {
	gorm.Model
	Nama    string `gorm:"not null" json:"nama"`
	Lokasi  string `gorm:"not null" json:"lokasi"`
	Penatua string `gorm:"not null" json:"penatua"`
}
func (Sektor) TableName() string {
	return "sektor"
 }
func init() {
	config.Connect()
	db_sektor = config.GetDB()
	// Auto migrate the Sektor model
	db_sektor.AutoMigrate(&Sektor{})
}

func CreateSektor(sektor *Sektor) error {
	err := db_sektor.Create(sektor).Error
	if err != nil {
		return fmt.Errorf("failed to create sektor: %v", err)
	}
	return nil
}

func GetAllSektor() ([]Sektor, error) {
	var sektors []Sektor
	err := db_sektor.Find(&sektors).Error
	return sektors, err
}

func GetSektorByID(sektorID uint) (Sektor, error) {
	var sektor Sektor
	err := db_sektor.First(&sektor, sektorID).Error
	return sektor, err
}

func UpdateSektor(sektor *Sektor) error {
	err := db_sektor.Save(sektor).Error
	if err != nil {
		return fmt.Errorf("failed to update sektor: %v", err)
	}
	return nil
}

func DeleteSektor(sektorID uint) error {
	return db_sektor.Where("id = ?", sektorID).Delete(Sektor{}).Error
}
