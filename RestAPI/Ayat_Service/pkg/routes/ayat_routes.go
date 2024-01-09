package routes

import (
	"github.com/gorilla/mux"
	"github.com/rianshp/ayat-service/pkg/controllers"
)

func SetupRouter(router *mux.Router) {	

	// Jemaat routes
	router.HandleFunc("/ayat", controllers.CreateAyat).Methods("POST")
	router.HandleFunc("/ayat/{id}", controllers.GetAyatByID).Methods("GET")
	router.HandleFunc("/ayat", controllers.GetAllAyat).Methods("GET")
	router.HandleFunc("/ayat/{id}", controllers.UpdateAyat).Methods("PUT")
	router.HandleFunc("/ayat/{id}", controllers.DeleteAyat).Methods("DELETE")

}


func AyatRoutes(router *mux.Router) {
	SetupRouter(router)
	// Tambahkan rute-rute lainnya di sini jika diperlukan
}