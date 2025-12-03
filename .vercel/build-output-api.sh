#!/bin/bash

# Make storage and bootstrap/cache directories writable
mkdir -p .vercel/output/functions/public/index.func/storage/framework/views
mkdir -p .vercel/output/functions/public/index.func/storage/framework/cache
mkdir -p .vercel/output/functions/public/index.func/storage/framework/sessions
mkdir -p .vercel/output/functions/public/index.func/storage/logs
mkdir -p .vercel/output/functions/public/index.func/bootstrap/cache

# Link the storage directory
cp -r storage/* .vercel/output/functions/public/index.func/storage/
rm -rf .vercel/output/functions/public/index.func/storage/app/public
ln -s /tmp/storage/app/public .vercel/output/functions/public/index.func/storage/app/public