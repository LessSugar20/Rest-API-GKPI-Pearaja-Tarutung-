package controllers

import (
	"encoding/json"
	"net/http"
	"strconv"

	"github.com/gorilla/mux"
	"github.com/rianshp/pengumuman-service/pkg/models"
)

func CreatePengumuman(w http.ResponseWriter, r *http.Request) {
	var pengumuman models.Pengumuman

	err := json.NewDecoder(r.Body).Decode(&pengumuman)
	if err != nil {
		http.Error(w, err.Error(), http.StatusBadRequest)
		return
	}

	err = models.CreatePengumuman(&pengumuman)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	w.WriteHeader(http.StatusCreated)
	json.NewEncoder(w).Encode(pengumuman)
}

func GetAllPengumuman(w http.ResponseWriter, r *http.Request) {
	pengumumans, err := models.GetAllPengumuman()
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	json.NewEncoder(w).Encode(pengumumans)
}

func GetPengumumanByID(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	pengumumanID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid pengumuman ID", http.StatusBadRequest)
		return
	}

	pengumuman, err := models.GetPengumumanByID(uint(pengumumanID))
	if err != nil {
		http.Error(w, "Pengumuman not found", http.StatusNotFound)
		return
	}

	json.NewEncoder(w).Encode(pengumuman)
}

func UpdatePengumuman(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	pengumumanID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid pengumuman ID", http.StatusBadRequest)
		return
	}

	pengumuman, err := models.GetPengumumanByID(uint(pengumumanID))
	if err != nil {
		http.Error(w, "Pengumuman not found", http.StatusNotFound)
		return
	}

	err = json.NewDecoder(r.Body).Decode(&pengumuman)
	if err != nil {
		http.Error(w, err.Error(), http.StatusBadRequest)
		return
	}

	err = models.UpdatePengumuman(&pengumuman)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	json.NewEncoder(w).Encode(pengumuman)
}

func DeletePengumuman(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	pengumumanID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid pengumuman ID", http.StatusBadRequest)
		return
	}

	err = models.DeletePengumuman(uint(pengumumanID))
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	w.WriteHeader(http.StatusNoContent)
}
