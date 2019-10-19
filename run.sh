#!/bin/bash
docker run -v "$(pwd):/app" composer:latest run-script run $@