package main

import (
	"log"
	"net/http"

	"github.com/gorilla/mux"
	"github.com/rianshp/sektor-service/pkg/config"
	"github.com/rianshp/sektor-service/pkg/routes"
)

func main() {
	// Menghubungkan ke database
	config.Connect()

	// Inisialisasi router
	router := mux.NewRouter()

	// Mengatur rute-rute
	routes.SektorRoutes(router)

	// Menjalankan server
	log.Println("Server started on port 4040")
	log.Fatal(http.ListenAndServe(":4040", router))
}
