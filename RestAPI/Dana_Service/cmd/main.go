package main

import (
	"log"
	"net/http"

	"github.com/gorilla/mux"
	"github.com/rianshp/dana-service/pkg/config"
	"github.com/rianshp/dana-service/pkg/routes"
)

func main() {
	// Menghubungkan ke database
	config.Connect()

	// Inisialisasi router
	router := mux.NewRouter()

	// Mengatur rute-rute
	routes.DanaRoutes(router)

	// Menjalankan server
	log.Println("Server started on port 8080")
	log.Fatal(http.ListenAndServe(":8080", router))
}
