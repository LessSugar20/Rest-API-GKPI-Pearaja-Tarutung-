package models

import (
	"time"

	"github.com/jinzhu/gorm"
	"github.com/rianshp/pengumuman-service/pkg/config"
)
var db *gorm.DB

type Pengumuman struct {
	gorm.Model
	Judul   string    `gorm:"not null" json:"judul"`
	Isi     string    `gorm:"not null" json:"isi"`
	Tanggal time.Time `json:"tanggal"`
}
func (Pengumuman) TableName() string {
    return "pengumuman"
}

func init() {
	config.Connect()
	db = config.GetDB()
	db.AutoMigrate(&Pengumuman{})
}

func CreatePengumuman(pengumuman *Pengumuman) error {
	return db.Create(pengumuman).Error
}

func GetAllPengumuman() ([]Pengumuman, error) {
	var pengumumans []Pengumuman
	err := db.Find(&pengumumans).Error
	return pengumumans, err
}

func GetPengumumanByID(pengumumanID uint) (Pengumuman, error) {
	var pengumuman Pengumuman
	err := db.Where("id = ?", pengumumanID).First(&pengumuman).Error
	return pengumuman, err
}

func UpdatePengumuman(pengumuman *Pengumuman) error {
	return db.Save(pengumuman).Error
}

func DeletePengumuman(pengumumanID uint) error {
	return db.Where("id = ?", pengumumanID).Delete(Pengumuman{}).Error
}
