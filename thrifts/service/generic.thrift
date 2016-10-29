namespace nova com.youzan.test.service

struct GenericRequest {
    1:optional string serviceName;
    2:optional string methodName;
    3:optional string methodParams;
}

struct GenericResponse {
    1:optional string response;
}

exception GenericException {
    1:optional string message;
    2:optional i32 code;
    3:optional string metaData;
}

service GenericService {
    GenericResponse invoke(1:required GenericRequest request) throws (1:required GenericException ex);
}