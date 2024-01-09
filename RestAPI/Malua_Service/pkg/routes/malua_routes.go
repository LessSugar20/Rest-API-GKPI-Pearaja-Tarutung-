package routes

import (
	"github.com/gorilla/mux"
	"github.com/rianshp/malua-service/pkg/controllers"
)

func SetRoutes(router *mux.Router) {
	router.HandleFunc("/malua", controllers.CreateMalua).Methods("POST")
	router.HandleFunc("/malua", controllers.GetAllMalua).Methods("GET")
	router.HandleFunc("/malua/{id}", controllers.GetMaluaByID).Methods("GET")
	router.HandleFunc("/malua/{id}", controllers.UpdateMalua).Methods("PUT")
	router.HandleFunc("/malua/{id}", controllers.DeleteMalua).Methods("DELETE")
}


func MaluaRoutes(router *mux.Router) {
	SetRoutes(router)
	// Tambahkan rute-rute lainnya di sini jika diperlukan
}
