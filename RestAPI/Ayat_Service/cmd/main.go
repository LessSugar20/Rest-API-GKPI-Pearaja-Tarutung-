package main

import (
	"log"
	"net/http"

	"github.com/gorilla/mux"
	"github.com/rianshp/ayat-service/pkg/config"
	"github.com/rianshp/ayat-service/pkg/routes"
)

func main() {
	// Menghubungkan ke database
	config.Connect()

	// Inisialisasi router
	router := mux.NewRouter()

	// Mengatur rute-rute
	routes.AyatRoutes(router)

	// Menjalankan server
	log.Println("Server started on port 9090")
	log.Fatal(http.ListenAndServe(":9090", router))
}
