	package routes

	import (
		"github.com/gorilla/mux"
		"github.com/rianshp/service-user/pkg/controllers"
	)

	func SetUserRoutes(router *mux.Router) {
		router.HandleFunc("/users", controllers.CreateUser).Methods("POST")
		router.HandleFunc("/users", controllers.GetAllUsers).Methods("GET")
		router.HandleFunc("/users/{id}", controllers.GetUserByID).Methods("GET")
		router.HandleFunc("/users/{id}", controllers.UpdateUser).Methods("PUT")
		router.HandleFunc("/users/{id}", controllers.DeleteUser).Methods("DELETE")
	}


	func UserRoutes(router *mux.Router) {
		SetUserRoutes(router)
		// Tambahkan rute-rute lainnya di sini jika diperlukan
	}
