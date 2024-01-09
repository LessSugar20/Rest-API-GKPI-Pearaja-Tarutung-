package routes

import (
	"github.com/gorilla/mux"
	"github.com/rianshp/jemaat-service/pkg/controllers"
)

func SetupRouter(router *mux.Router) {	

	// Jemaat routes
	router.HandleFunc("/jemaat", controllers.CreateJemaat).Methods("POST")
	router.HandleFunc("/jemaat/{id}", controllers.GetJemaatByID).Methods("GET")
	router.HandleFunc("/jemaat", controllers.GetAllJemaat).Methods("GET")
	router.HandleFunc("/jemaat/{id}", controllers.UpdateJemaat).Methods("PUT")
	router.HandleFunc("/jemaat/{id}", controllers.DeleteJemaat).Methods("DELETE")

}


func SektorRoutes(router *mux.Router) {
	SetupRouter(router)
	// Tambahkan rute-rute lainnya di sini jika diperlukan
}