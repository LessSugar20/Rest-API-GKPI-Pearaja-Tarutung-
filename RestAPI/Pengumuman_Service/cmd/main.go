package main

import (
	"log"
	"net/http"

	"github.com/gorilla/mux"
	"github.com/rianshp/pengumuman-service/pkg/config"
	"github.com/rianshp/pengumuman-service/pkg/routes"
)

func main() {
	// Menghubungkan ke database
	config.Connect()

	// Inisialisasi router
	router := mux.NewRouter()

	// Mengatur rute-rute
	routes.PengumumanRoutes(router)

	// Menjalankan server
	log.Println("Server started on port 3030")
	log.Fatal(http.ListenAndServe(":3030", router))
}
