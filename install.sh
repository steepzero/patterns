#!/bin/bash
docker run -v "$(pwd):/app" -u 1000 composer:latest install --ignore-platform-reqs