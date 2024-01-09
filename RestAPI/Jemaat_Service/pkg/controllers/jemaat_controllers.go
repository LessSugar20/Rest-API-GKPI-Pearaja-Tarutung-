package controllers

import (
	"encoding/json"
	"net/http"
	"strconv"

	"github.com/gorilla/mux"
	"github.com/rianshp/jemaat-service/pkg/models"
)

func CreateJemaat(w http.ResponseWriter, r *http.Request) {
	var jemaat models.Jemaat

	err := json.NewDecoder(r.Body).Decode(&jemaat)
	if err != nil {
		http.Error(w, err.Error(), http.StatusBadRequest)
		return
	}

	err = models.CreateJemaat(&jemaat)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	w.WriteHeader(http.StatusCreated)
	json.NewEncoder(w).Encode(jemaat)
}

func GetJemaatByID(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	jemaatID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid jemaat ID", http.StatusBadRequest)
		return
	}

	jemaat, err := models.GetJemaatByID(uint(jemaatID))
	if err != nil {
		http.Error(w, "Jemaat not found", http.StatusNotFound)
		return
	}

	json.NewEncoder(w).Encode(jemaat)
}

func GetAllJemaat(w http.ResponseWriter, r *http.Request) {
	jemaats, err := models.GetAllJemaat()
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	json.NewEncoder(w).Encode(jemaats)
}

func UpdateJemaat(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	jemaatID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid jemaat ID", http.StatusBadRequest)
		return
	}

	jemaat, err := models.GetJemaatByID(uint(jemaatID))
	if err != nil {
		http.Error(w, "Jemaat not found", http.StatusNotFound)
		return
	}

	err = json.NewDecoder(r.Body).Decode(&jemaat)
	if err != nil {
		http.Error(w, err.Error(), http.StatusBadRequest)
		return
	}

	err = models.UpdateJemaat(&jemaat)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	json.NewEncoder(w).Encode(jemaat)
}

func DeleteJemaat(w http.ResponseWriter, r *http.Request) {
	params := mux.Vars(r)
	jemaatID, err := strconv.Atoi(params["id"])
	if err != nil {
		http.Error(w, "Invalid jemaat ID", http.StatusBadRequest)
		return
	}

	err = models.DeleteJemaat(uint(jemaatID))
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	w.WriteHeader(http.StatusNoContent)
}
