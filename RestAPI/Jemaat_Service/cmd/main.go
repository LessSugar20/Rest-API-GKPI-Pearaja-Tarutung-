package main

import (
	"log"
	"net/http"

	"github.com/gorilla/mux"
	"github.com/rianshp/jemaat-service/pkg/config"
	"github.com/rianshp/jemaat-service/pkg/routes"
)

func main() {
	// Menghubungkan ke database
	config.Connect()

	// Inisialisasi router
	router := mux.NewRouter()

	// Mengatur rute-rute
	routes.SektorRoutes(router)

	// Menjalankan server
	log.Println("Server started on port 1010")
	log.Fatal(http.ListenAndServe(":1010", router))
}
