package controllers

import (
	"encoding/json"
	"net/http"
	"strconv"

	"github.com/gorilla/mux"
	"github.com/rianshp/malua-service/pkg/models"
)

func CreateMalua(w http.ResponseWriter, r *http.Request) {
	var malua models.Malua

	err := json.NewDecoder(r.Body).Decode(&malua)
	if err != nil {
		http.Error(w, err.Error(), http.StatusBadRequest)
		return
	}

	err = models.CreateMalua(&malua)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	w.WriteHeader(http.StatusCreated)
	json.NewEncoder(w).Encode(malua)
}

func GetAllMalua(w http.ResponseWriter, r *http.Request) {
	maluas, err := models.GetAllMalua()
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	json.NewEncoder(w).Encode(maluas)
}

func GetMaluaByID(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	maluaID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid malua ID", http.StatusBadRequest)
		return
	}

	malua, err := models.GetMaluaByID(uint(maluaID))
	if err != nil {
		http.Error(w, "Malua not found", http.StatusNotFound)
		return
	}

	json.NewEncoder(w).Encode(malua)
}

func UpdateMalua(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	maluaID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid malua ID", http.StatusBadRequest)
		return
	}

	malua, err := models.GetMaluaByID(uint(maluaID))
	if err != nil {
		http.Error(w, "Malua not found", http.StatusNotFound)
		return
	}

	err = json.NewDecoder(r.Body).Decode(&malua)
	if err != nil {
		http.Error(w, err.Error(), http.StatusBadRequest)
		return
	}

	err = models.UpdateMalua(&malua)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	json.NewEncoder(w).Encode(malua)
}

func DeleteMalua(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	maluaID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid malua ID", http.StatusBadRequest)
		return
	}

	err = models.DeleteMalua(uint(maluaID))
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	w.WriteHeader(http.StatusNoContent)
}
