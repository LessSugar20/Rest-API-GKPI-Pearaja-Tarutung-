package controllers

import (
	"encoding/json"
	"net/http"
	"strconv"

	"github.com/gorilla/mux"
	"github.com/rianshp/sektor-service/pkg/models"
)

func CreateSektor(w http.ResponseWriter, r *http.Request) {
	var sektor models.Sektor

	err := json.NewDecoder(r.Body).Decode(&sektor)
	if err != nil {
		http.Error(w, err.Error(), http.StatusBadRequest)
		return
	}

	err = models.CreateSektor(&sektor)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	w.WriteHeader(http.StatusCreated)
	json.NewEncoder(w).Encode(sektor)
}

func GetAllSektor(w http.ResponseWriter, r *http.Request) {
	sektors, err := models.GetAllSektor()
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	json.NewEncoder(w).Encode(sektors)
}

func GetSektorByID(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	sektorID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid sektor ID", http.StatusBadRequest)
		return
	}

	sektor, err := models.GetSektorByID(uint(sektorID))
	if err != nil {
		http.Error(w, "Sektor not found", http.StatusNotFound)
		return
	}

	json.NewEncoder(w).Encode(sektor)
}

func UpdateSektor(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	sektorID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid sektor ID", http.StatusBadRequest)
		return
	}

	sektor, err := models.GetSektorByID(uint(sektorID))
	if err != nil {
		http.Error(w, "Sektor not found", http.StatusNotFound)
		return
	}

	err = json.NewDecoder(r.Body).Decode(&sektor)
	if err != nil {
		http.Error(w, err.Error(), http.StatusBadRequest)
		return
	}

	err = models.UpdateSektor(&sektor)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	json.NewEncoder(w).Encode(sektor)
}

func DeleteSektor(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	sektorID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid sektor ID", http.StatusBadRequest)
		return
	}

	err = models.DeleteSektor(uint(sektorID))
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	w.WriteHeader(http.StatusNoContent)
}