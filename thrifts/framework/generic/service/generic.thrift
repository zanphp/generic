namespace nova com.youzan.nova.framework.generic.service

struct GenericRequest {
    1:optional string serviceName;
    2:optional string methodName;
    3:optional list<string> parameterTypes,
    4:optional list<string> argv;
}

struct GenericResponse {
    1:optional i32 code; // 200 success
    2:optional string message;
    3:optional string data;
}

service GenericService {
    GenericResponse invoke(1:GenericRequest request);
}