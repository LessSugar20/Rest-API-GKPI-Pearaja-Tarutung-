package main

import (
	"log"
	"net/http"

	"github.com/gorilla/mux"
	"github.com/rianshp/malua-service/pkg/config"
	"github.com/rianshp/malua-service/pkg/routes"
)

func main() {
	// Menghubungkan ke database
	config.Connect()

	// Inisialisasi router
	router := mux.NewRouter()

	// Mengatur rute-rute
	routes.MaluaRoutes(router)

	// Menjalankan server
	log.Println("Server started on port 2020")
	log.Fatal(http.ListenAndServe(":2020", router))
}
