package main

import (
	"log"
	"net/http"

	"github.com/gorilla/mux"
	"github.com/rianshp/userjemaat-service/pkg/config"
	"github.com/rianshp/userjemaat-service/pkg/routes"
)

func main() {
	// Menghubungkan ke database
	config.Connect()

	// Inisialisasi router
	router := mux.NewRouter()

	// Mengatur rute-rute
	routes.UJemaatRoutes(router)

	// Menjalankan server
	log.Println("Server started on port 9000")
	log.Fatal(http.ListenAndServe(":9000", router))
}
