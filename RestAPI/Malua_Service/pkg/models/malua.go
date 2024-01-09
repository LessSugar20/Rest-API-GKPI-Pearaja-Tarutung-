package models

import (
	"fmt"

	"github.com/jinzhu/gorm"
	"github.com/rianshp/malua-service/pkg/config"
)

var db_malua *gorm.DB

type Malua struct {
	gorm.Model
	NoSurat         string `gorm:"not null" json:"no_surat"`
	IDUserJemaat    uint   `gorm:"not null" json:"id_user_jemaat"`
	TempatLahir     string `gorm:"not null" json:"tempat_lahir"`
	TanggalLahir    string `gorm:"not null" json:"tanggal_lahir"`
	TanggalBaptis   string `gorm:"not null" json:"tanggal_baptis"`
	TanggalSidi     string `json:"tanggal_sidi"`
	Nats            string `json:"nats"`
	Pendeta         string `json:"pendeta"`
	GuruJemaat      string `json:"guru_jemaat"`
}

func (Malua) TableName() string {
	return "malua"
}

func init() {
	config.Connect()
	db_malua = config.GetDB()
	// Auto migrate the Malua model
	db_malua.AutoMigrate(&Malua{})
}

func CreateMalua(malua *Malua) error {
	err := db_malua.Create(malua).Error
	if err != nil {
		return fmt.Errorf("failed to create malua: %v", err)
	}
	return nil
}

func GetAllMalua() ([]Malua, error) {
	var maluas []Malua
	err := db_malua.Find(&maluas).Error
	return maluas, err
}

func GetMaluaByID(maluaID uint) (Malua, error) {
	var malua Malua
	err := db_malua.First(&malua, maluaID).Error
	return malua, err
}

func UpdateMalua(malua *Malua) error {
	err := db_malua.Save(malua).Error
	if err != nil {
		return fmt.Errorf("failed to update malua: %v", err)
	}
	return nil
}

func DeleteMalua(maluaID uint) error {
	return db_malua.Where("id = ?", maluaID).Delete(Malua{}).Error
}
