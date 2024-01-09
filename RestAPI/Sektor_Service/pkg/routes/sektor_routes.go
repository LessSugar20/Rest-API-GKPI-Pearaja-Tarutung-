package routes

import (
	"github.com/gorilla/mux"
	"github.com/rianshp/sektor-service/pkg/controllers"
)

func SetSektorRoutes(router *mux.Router) {
	router.HandleFunc("/sektor", controllers.CreateSektor).Methods("POST")
	router.HandleFunc("/sektor", controllers.GetAllSektor).Methods("GET")
	router.HandleFunc("/sektor/{id}", controllers.GetSektorByID).Methods("GET")
	router.HandleFunc("/sektor/{id}", controllers.UpdateSektor).Methods("PUT")
	router.HandleFunc("/sektor/{id}", controllers.DeleteSektor).Methods("DELETE")
}


func SektorRoutes(router *mux.Router) {
	SetSektorRoutes(router)
	// Tambahkan rute-rute lainnya di sini jika diperlukan
}
