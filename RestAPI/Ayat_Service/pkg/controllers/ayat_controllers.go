package controllers

import (
	"encoding/json"
	"net/http"
	"strconv"

	"github.com/gorilla/mux"
	"github.com/rianshp/ayat-service/pkg/models"
)
func CreateAyat(w http.ResponseWriter, r *http.Request) {
	var ayat models.Ayat

	err := json.NewDecoder(r.Body).Decode(&ayat)
	if err != nil {
		http.Error(w, err.Error(), http.StatusBadRequest)
		return
	}

	err = models.CreateAyat(&ayat)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	w.WriteHeader(http.StatusCreated)
	json.NewEncoder(w).Encode(ayat)
}

func GetAyatByID(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	ayatID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid jemaat ID", http.StatusBadRequest)
		return
	}

	ayat, err := models.GetAyatByID(uint(ayatID))
	if err != nil {
		http.Error(w, "Jemaat not found", http.StatusNotFound)
		return
	}

	json.NewEncoder(w).Encode(ayat)
}

func GetAllAyat(w http.ResponseWriter, r *http.Request) {
	ayats, err := models.GetAllAyat()
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	json.NewEncoder(w).Encode(ayats)
}

func UpdateAyat(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	ayatID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid jemaat ID", http.StatusBadRequest)
		return
	}

	ayat, err := models.GetAyatByID(uint(ayatID))
	if err != nil {
		http.Error(w, "Jemaat not found", http.StatusNotFound)
		return
	}

	err = json.NewDecoder(r.Body).Decode(&ayat)
	if err != nil {
		http.Error(w, err.Error(), http.StatusBadRequest)
		return
	}

	err = models.UpdateAyat(&ayat)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	json.NewEncoder(w).Encode(ayat)
}

func DeleteAyat(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	ayatID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid jemaat ID", http.StatusBadRequest)
		return
	}

	err = models.DeleteAyat(uint(ayatID))
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	w.WriteHeader(http.StatusNoContent)
}