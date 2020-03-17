# protobuf-php
This repository contains only PHP files to support Composer installation. This repository is a mirror of [protobuf](https://github.com/protocolbuffers/protobuf). Any support requests, bug reports, or development contributions should be directed to that project. To install protobuf for PHP, please see https://github.com/protocolbuffers/protobuf/tree/master/php

Features:
* Keep default values in generated JSON.
By default protobuf compiler strips all default values. In some cases it can be needed to keep them. It can be triggered by code below:
```` 
GPBWire::setKeepDefaultValues(true);
````
