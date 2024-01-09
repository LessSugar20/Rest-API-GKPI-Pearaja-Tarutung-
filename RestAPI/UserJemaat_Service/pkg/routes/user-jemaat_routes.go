package routes

import (
	"github.com/gorilla/mux"
	"github.com/rianshp/userjemaat-service/pkg/controllers"
)

func SetupRouter(router *mux.Router) {	

	// Jemaat routes
	router.HandleFunc("/user-jemaat", controllers.CreateUserJemaat).Methods("POST")
	router.HandleFunc("/user-jemaat/{id}", controllers.GetUserJemaatByID).Methods("GET")
	router.HandleFunc("/user-jemaat", controllers.GetAllUserJemaat).Methods("GET")
	router.HandleFunc("/user-jemaat/{id}", controllers.UpdateUserJemaat).Methods("PUT")
	router.HandleFunc("/user-jemaat/{id}", controllers.DeleteUserJemaat).Methods("DELETE")

}


func UJemaatRoutes(router *mux.Router) {
	SetupRouter(router)
	// Tambahkan rute-rute lainnya di sini jika diperlukan
}