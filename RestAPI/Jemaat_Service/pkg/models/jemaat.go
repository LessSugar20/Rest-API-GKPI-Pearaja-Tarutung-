package models

import (
	"time"

	"github.com/jinzhu/gorm"
	"github.com/rianshp/jemaat-service/pkg/config"
)

var db_jemaat *gorm.DB

type Jemaat struct {
	gorm.Model
	Ayah           string     `gorm:"not null" json:"ayah"`
	Ibu            string     `gorm:"not null" json:"ibu"`
	PekerjaanAyah  string     `json:"pekerjaan_ayah"`
	PekerjaanIbu   string     `json:"pekerjaan_ibu"`
	Sektor         string     `gorm:"not null" json:"sektor"`
	MasukTanggal   time.Time  `gorm:"not null" json:"masuk_tgl"`
	PindahTanggal  *time.Time `json:"pindah_tgl"`
	PindahDari     string     `json:"pindah_dari"`
	PindahKe       string     `json:"pindah_ke"`
}
func (Jemaat) TableName() string {
	return "jemaat"
 } 	
func init() {
	config.Connect()
	db_jemaat = config.GetDB()
	db_jemaat.AutoMigrate(&Jemaat{})
}

func CreateJemaat(jemaat *Jemaat) error {
	err := db_jemaat.Create(jemaat).Error
	if err != nil {
		return err
	}
	return nil
}

func GetJemaatByID(jemaatID uint) (Jemaat, error) {
	var jemaat Jemaat
	err := db_jemaat.First(&jemaat, jemaatID).Error
	return jemaat, err
}

func GetAllJemaat() ([]Jemaat, error) {
	var jemaats []Jemaat
	err := db_jemaat.Find(&jemaats).Error
	return jemaats, err
}

func UpdateJemaat(jemaat *Jemaat) error {
	err := db_jemaat.Save(jemaat).Error
	if err != nil {
		return err
	}
	return nil
}

func DeleteJemaat(jemaatID uint) error {
	return db_jemaat.Delete(&Jemaat{}, jemaatID).Error
}
