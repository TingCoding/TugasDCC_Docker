# Tahap build
FROM golang:1.20-alpine AS builder

WORKDIR /app

COPY main.go .

# Kompilasi aplikasi Go
RUN go mod init example.com/app && \
    CGO_ENABLED=0 GOOS=linux go build -o app .

# Tahap final
FROM alpine:latest

WORKDIR /root/

# Salin artifact dari tahap builder
COPY --from=builder /app/app .

# Expose port yang dibutuhkan
EXPOSE 8080

# Perintah untuk menjalankan aplikasi
CMD ["./app"]