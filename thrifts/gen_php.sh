#!/usr/bin/env bash

if [ ! -f "/usr/local/bin/yz-thrift" ] && [ ! `which yz-thrift` ]; then
    echo "                                                                "
    echo "    yz-thrift tool not found, please follow the instruction below:"
    echo "                                                                "
    echo "    git clone http://git.qima-inc.com/platform/thrift-binary.git"
    echo "    cd thrift-binary"
    echo "    sudo sh install.sh"
    echo "                                                                "
    exit 1
fi

cd thrifts
rm -rf ../gen-php/*
yz-thrift -I `pwd` -gen php -out ../gen-php
cd -