package utils

import (
	"golang.org/x/crypto/bcrypt"
)

// GenerateHashedPassword menghasilkan hash dari password yang diberikan
func GenerateHashedPassword(password string) (string, error) {
	hashedPassword, err := bcrypt.GenerateFromPassword([]byte(password), bcrypt.DefaultCost)
	if err != nil {
		return "", err
	}
	return string(hashedPassword), nil
}

// ComparePasswordHash membandingkan password dengan hash yang diberikan
func ComparePasswordHash(password, hash string) bool {
	err := bcrypt.CompareHashAndPassword([]byte(hash), []byte(password))
	return err == nil
}
