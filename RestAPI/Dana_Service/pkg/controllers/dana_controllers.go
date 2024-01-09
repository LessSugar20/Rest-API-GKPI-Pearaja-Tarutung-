package controllers

import (
	"encoding/json"
	"net/http"
	"strconv"

	"github.com/gorilla/mux"
	"github.com/rianshp/dana-service/pkg/models"
)

func CreateDana(w http.ResponseWriter, r *http.Request) {
	var dana models.Dana

	err := json.NewDecoder(r.Body).Decode(&dana)
	if err != nil {
		http.Error(w, err.Error(), http.StatusBadRequest)
		return
	}

	err = models.CreateDana(&dana)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	w.WriteHeader(http.StatusCreated)
	json.NewEncoder(w).Encode(dana)
}

func GetAllDana(w http.ResponseWriter, r *http.Request) {
	danas, err := models.GetAllDana()
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	json.NewEncoder(w).Encode(danas)
}

func GetDanaByID(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	danaID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid dana ID", http.StatusBadRequest)
		return
	}

	dana, err := models.GetDanaByID(uint(danaID))
	if err != nil {
		http.Error(w, "Dana not found", http.StatusNotFound)
		return
	}

	json.NewEncoder(w).Encode(dana)
}

func UpdateDana(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	danaID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid dana ID", http.StatusBadRequest)
		return
	}

	dana, err := models.GetDanaByID(uint(danaID))
	if err != nil {
		http.Error(w, "Dana not found", http.StatusNotFound)
		return
	}

	err = json.NewDecoder(r.Body).Decode(&dana)
	if err != nil {
		http.Error(w, err.Error(), http.StatusBadRequest)
		return
	}

	err = models.UpdateDana(&dana)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	json.NewEncoder(w).Encode(dana)
}

func DeleteDana(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	danaID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid dana ID", http.StatusBadRequest)
		return
	}

	err = models.DeleteDana(uint(danaID))
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	w.WriteHeader(http.StatusNoContent)
}
