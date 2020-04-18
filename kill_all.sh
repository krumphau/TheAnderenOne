#!/bin/sh
./remove_docker_containers.sh
./remove_docker_images.sh
# there are two entries intentionally in order to clean up parent images once the child images hve been removed
./remove_docker_images.sh
