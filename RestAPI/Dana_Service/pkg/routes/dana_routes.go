package routes

import (
	"github.com/gorilla/mux"
	"github.com/rianshp/dana-service/pkg/controllers"
)

func SetupRouter(router *mux.Router) {	

	// Jemaat routes
	router.HandleFunc("/keuangan", controllers.CreateDana).Methods("POST")
	router.HandleFunc("/keuangan/{id}", controllers.GetDanaByID).Methods("GET")
	router.HandleFunc("/keuangan", controllers.GetAllDana).Methods("GET")
	router.HandleFunc("/keuangan/{id}", controllers.UpdateDana).Methods("PUT")
	router.HandleFunc("/keuangan/{id}", controllers.DeleteDana).Methods("DELETE")

}


func DanaRoutes(router *mux.Router) {
	SetupRouter(router)
	// Tambahkan rute-rute lainnya di sini jika diperlukan
}