package routes

import (
	"github.com/gorilla/mux"
	"github.com/rianshp/pengumuman-service/pkg/controllers"
)

func SetPengumumanRoutes(router *mux.Router) {
	router.HandleFunc("/pengumuman", controllers.CreatePengumuman).Methods("POST")
	router.HandleFunc("/pengumuman", controllers.GetAllPengumuman).Methods("GET")
	router.HandleFunc("/pengumuman/{id}", controllers.GetPengumumanByID).Methods("GET")
	router.HandleFunc("/pengumuman/{id}", controllers.UpdatePengumuman).Methods("PUT")
	router.HandleFunc("/pengumuman/{id}", controllers.DeletePengumuman).Methods("DELETE")
}


func PengumumanRoutes(router *mux.Router) {
	SetPengumumanRoutes(router)
	// Tambahkan rute-rute lainnya di sini jika diperlukan
}
