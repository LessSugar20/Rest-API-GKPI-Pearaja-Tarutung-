package controllers

import (
	"encoding/json"
	"net/http"
	"strconv"

	"github.com/gorilla/mux"
	"github.com/rianshp/userjemaat-service/pkg/models"
)

func CreateUserJemaat(w http.ResponseWriter, r *http.Request) {
	var userJemaat models.UserJemaat

	err := json.NewDecoder(r.Body).Decode(&userJemaat)
	if err != nil {
		http.Error(w, err.Error(), http.StatusBadRequest)
		return
	}

	err = models.CreateUserJemaat(&userJemaat)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	w.WriteHeader(http.StatusCreated)
	json.NewEncoder(w).Encode(userJemaat)
}

func GetAllUserJemaat(w http.ResponseWriter, r *http.Request) {
	userJemaats, err := models.GetAllUserJemaat()
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	json.NewEncoder(w).Encode(userJemaats)
}

func GetUserJemaatByID(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	id, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid user jemaat ID", http.StatusBadRequest)
		return
	}

	userJemaat, err := models.GetUserJemaatByID(uint(id))
	if err != nil {
		http.Error(w, "User jemaat not found", http.StatusNotFound)
		return
	}

	json.NewEncoder(w).Encode(userJemaat)
}

func UpdateUserJemaat(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	id, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid user jemaat ID", http.StatusBadRequest)
		return
	}

	var updatedUserJemaat models.UserJemaat
	err = json.NewDecoder(r.Body).Decode(&updatedUserJemaat)
	if err != nil {
		http.Error(w, err.Error(), http.StatusBadRequest)
		return
	}

	userJemaat, err := models.GetUserJemaatByID(uint(id))
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	// Update user jemaat properties
	userJemaat.NoInduk = updatedUserJemaat.NoInduk
	userJemaat.Nama = updatedUserJemaat.Nama
	userJemaat.Status = updatedUserJemaat.Status
	userJemaat.TempatLahir = updatedUserJemaat.TempatLahir
	userJemaat.TanggalLahir = updatedUserJemaat.TanggalLahir
	userJemaat.Baptis = updatedUserJemaat.Baptis
	userJemaat.Sidi = updatedUserJemaat.Sidi
	userJemaat.Nikah = updatedUserJemaat.Nikah
	userJemaat.PindahTanggal = updatedUserJemaat.PindahTanggal
	userJemaat.Meninggal = updatedUserJemaat.Meninggal

	err = models.UpdateUserJemaat(&userJemaat)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	json.NewEncoder(w).Encode(userJemaat)
}

func DeleteUserJemaat(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	id, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid user jemaat ID", http.StatusBadRequest)
		return
	}

	err = models.DeleteUserJemaat(uint(id))
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	w.WriteHeader(http.StatusNoContent)
}
