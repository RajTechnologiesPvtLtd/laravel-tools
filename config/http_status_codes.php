<?php

return [
    'http' => [
        [
            "status_code" => 100,
            "name" => "Continue",
            "description" => "Only a part of the request has been received by the server, but as long as it has not been rejected, the client should continue with the request.",
            "code" => "HTTP_CONTINUE",
        ],
        [
            "status_code" => 101,
            "name" => "Switching Protocols",
            "description" => "The server switches protocol.",
            "code" => "HTTP_SWITCHING_PROTOCOLS",
        ],
        [
            "status_code" => 102,
            "name" => "Switching Protocols",
            "description" => "text",
            "code" => "HTTP_PROCESSING",
        ],
        [
            "status_code" => 200,
            "name" => "OK",
            "description" => "The request is OK.",
            "code" => "HTTP_OK",
        ],
        [
            "status_code" => 201,
            "name" => "Created",
            "description" => "The request is complete, and a new resource is created.",
            "code" => "HTTP_CREATED",
        ],
        [
            "status_code" => 202,
            "name" => "Accepted",
            "description" => "The request is accepted for processing, but the processing is not complete.",
            "code" => "HTTP_ACCEPTED",
        ],
        [
            "status_code" => 203,
            "name" => "Non-authoritative Information",
            "description" => "The information in the entity header is from a local or third-party copy, not from the original server.",
            "code" => "HTTP_NON_AUTHORITATIVE_INFORMATION",
        ],
        [
            "status_code" => 204,
            "name" => "No Content",
            "description" => "A status code and a header are given in the response, but there is no entity-body in the reply.",
            "code" => "HTTP_NO_CONTENT",
        ],
        [
            "status_code" => 205,
            "name" => "Reset Content",
            "description" => "A status code and a header are given in the response, but there is no entity-body in the reply.",
            "code" => "HTTP_RESET_CONTENT",
        ],
        [
            "status_code" => 206,
            "name" => "Partial Content",
            "description" => "The server is returning partial data of the size requested. Used in response to a request specifying a Range header. The server must specify the range included in the response with the Content-Range header.",
            "code" => "HTTP_PARTIAL_CONTENT",
        ],
        [
            "status_code" => 207,
            "name" => "text",
            "description" => "text",
            "code" => "HTTP_MULTI_STATUS",
        ],
        [
            "status_code" => 208,
            "name" => "text",
            "description" => "text",
            "code" => "HTTP_ALREADY_REPORTED",
        ],
        [
            "status_code" => 226,
            "name" => "text",
            "description" => "text",
            "code" => "HTTP_IM_USED",
        ],
        [
            "status_code" => 300,
            "name" => "Multiple Choices",
            "description" => "A link list. The user can select a link and go to that location. Maximum five addresses.",
            "code" => "HTTP_MULTIPLE_CHOICES",
        ],
        [
            "status_code" => 301,
            "name" => "Moved Permanently",
            "description" => "The requested page has moved to a new url.",
            "code" => "HTTP_MOVED_PERMANENTLY",
        ],
        [
            "status_code" => 302,
            "name" => "Found",
            "description" => "The requested page has moved temporarily to a new url.",
            "code" => "HTTP_FOUND",
        ],
        [
            "status_code" => 303,
            "name" => "See Other",
            "description" => "The requested page can be found under a different url.",
            "code" => "HTTP_SEE_OTHER",
        ],
        [
            "status_code" => 304,
            "name" => "Not Modified",
            "description" => "This is the response code to an If-Modified-Since or If-None-Match header, where the URL has not been modified since the specified date.",
            "code" => "HTTP_NOT_MODIFIED",
        ],
        [
            "status_code" => 305,
            "name" => "Use Proxy",
            "description" => "The requested URL must be accessed through the proxy mentioned in the Location header.",
            "code" => "HTTP_USE_PROXY",
        ],
        [
            "status_code" => 306,
            "name" => "Unused",
            "description" => "This code was used in a previous version. It is no longer used, but the code is reserved.",
            "code" => "HTTP_RESERVED",
        ],
        [
            "status_code" => 307,
            "name" => "Temporary Redirect",
            "description" => "The requested page has moved temporarily to a new url.",
            "code" => "HTTP_TEMPORARY_REDIRECT",
        ],
        [
            "status_code" => 308,
            "name" => "text",
            "description" => "text",
            "code" => "HTTP_PERMANENTLY_REDIRECT",
        ],
        [
            "status_code" => 400,
            "name" => "Bad Request",
            "description" => "The server did not understand the request.",
            "code" => "HTTP_BAD_REQUEST",
        ],
        [
            "status_code" => 401,
            "name" => "Unauthorized",
            "description" => "The requested page needs a username and a password.",
            "code" => "HTTP_UNAUTHORIZED",
        ],
        [
            "status_code" => 402,
            "name" => "Payment Required",
            "description" => "You can not use this code yet.",
            "code" => "HTTP_PAYMENT_REQUIRED",
        ],
        [
            "status_code" => 403,
            "name" => "Forbidden",
            "description" => "Access is forbidden to the requested page.",
            "code" => "HTTP_FORBIDDEN",
        ],
        [
            "status_code" => 404,
            "name" => "Not Found",
            "description" => "The server can not find the requested page.",
            "code" => "HTTP_NOT_FOUND",
        ],
        [
            "status_code" => 405,
            "name" => "Method Not Allowed",
            "description" => "The method specified in the request is not allowed.",
            "code" => "HTTP_METHOD_NOT_ALLOWED",
        ],
        [
            "status_code" => 406,
            "name" => "Not Acceptable",
            "description" => "The server can only generate a response that is not accepted by the client.",
            "code" => "HTTP_NOT_ACCEPTABLE",
        ],
        [
            "status_code" => 407,
            "name" => "Proxy Authentication Required",
            "description" => "You must authenticate with a proxy server before this request can be served.",
            "code" => "HTTP_PROXY_AUTHENTICATION_REQUIRED",
        ],
        [
            "status_code" => 408,
            "name" => "Request Timeout",
            "description" => "The request took longer than the server was prepared to wait.",
            "code" => "HTTP_REQUEST_TIMEOUT",
        ],
        [
            "status_code" => 409,
            "name" => "Conflict",
            "description" => "The request could not be completed because of a conflict.",
            "code" => "HTTP_CONFLICT",
        ],
        [
            "status_code" => 410,
            "name" => "Gone",
            "description" => "The requested page is no longer available.",
            "code" => "HTTP_GONE",
        ],
        [
            "status_code" => 411,
            "name" => "Length Required",
            "description" => "The 'Content-Length' is not defined. The server will not accept the request without it .",
            "code" => "HTTP_LENGTH_REQUIRED",
        ],
        [
            "status_code" => 412,
            "name" => "Precondition Failed",
            "description" => "The pre condition given in the request evaluated to false by the server.",
            "code" => "HTTP_PRECONDITION_FAILED",
        ],
        [
            "status_code" => 413,
            "name" => "Request Entity Too Large",
            "description" => "The server will not accept the request, because the request entity is too large.",
            "code" => "HTTP_REQUEST_ENTITY_TOO_LARGE",
        ],
        [
            "status_code" => 414,
            "name" => "Request-url Too Long",
            "description" => "The server will not accept the request, because the url is too long. Occurs when you convert a 'post' request to a 'get' request with a long query information.",
            "code" => "HTTP_REQUEST_URI_TOO_LONG",
        ],
        [
            "status_code" => 415,
            "name" => "Unsupported Media Type",
            "description" => "The server will not accept the request, because the mediatype is not supported.",
            "code" => "HTTP_UNSUPPORTED_MEDIA_TYPE",
        ],
        [
            "status_code" => 416,
            "name" => "Requested Range Not Satisfiable",
            "description" => "The requested byte range is not available and is out of bounds.",
            "code" => "HTTP_REQUESTED_RANGE_NOT_SATISFIABLE",
        ],
        [
            "status_code" => 417,
            "name" => "Expectation Failed",
            "description" => "The expectation given in an Expect request-header field could not be met by this server.",
            "code" => "HTTP_EXPECTATION_FAILED",
        ],
        [
            "status_code" => 418,
            "name" => "text",
            "description" => "text",
            "code" => "HTTP_I_AM_A_TEAPOT",
        ],
        [
            "status_code" => 421,
            "name" => "text",
            "description" => "text",
            "code" => "HTTP_MISDIRECTED_REQUEST",
        ],
        [
            "status_code" => 422,
            "name" => "text",
            "description" => "text",
            "code" => "HTTP_UNPROCESSABLE_ENTITY",
        ],
        [
            "status_code" => 423,
            "name" => "text",
            "description" => "text",
            "code" => "HTTP_LOCKED",
        ],
        [
            "status_code" => 424,
            "name" => "text",
            "description" => "text",
            "code" => "HTTP_FAILED_DEPENDENCY",
        ],
        [
            "status_code" => 425,
            "name" => "text",
            "description" => "text",
            "code" => "HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL",
        ],
        [
            "status_code" => 426,
            "name" => "text",
            "description" => "text",
            "code" => "HTTP_UPGRADE_REQUIRED",
        ],
        [
            "status_code" => 428,
            "name" => "text",
            "description" => "text",
            "code" => "HTTP_PRECONDITION_REQUIRED",
        ],
        [
            "status_code" => 429,
            "name" => "text",
            "description" => "text",
            "code" => "HTTP_TOO_MANY_REQUESTS",
        ],
        [
            "status_code" => 431,
            "name" => "text",
            "description" => "text",
            "code" => "HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE",
        ],
        [
            "status_code" => 451,
            "name" => "text",
            "description" => "text",
            "code" => "HTTP_UNAVAILABLE_FOR_LEGAL_REASONS",
        ],
        [
            "status_code" => 500,
            "name" => "Internal Server Error",
            "description" => "The request was not completed. The server met an unexpected condition.",
            
            "code" => "HTTP_INTERNAL_SERVER_ERROR",
        ],
        [
            "status_code" => 501,
            "name" => "Not Implemented",
            "description" => "The request was not completed. The server did not support the functionality required.",
            "code" => "HTTP_NOT_IMPLEMENTED",
        ],
        [
            "status_code" => 502,
            "name" => "Bad Gateway",
            "description" => "The request was not completed. The server received an invalid response from the upstream server.",
            "code" => "HTTP_BAD_GATEWAY",
        ],
        [
            "status_code" => 503,
            "name" => "Service Unavailable",
            "description" => "The request was not completed. The server is temporarily overloading or down.",
            "code" => "HTTP_SERVICE_UNAVAILABLE",
        ],
        [
            "status_code" => 504,
            "name" => "Gateway Timeout",
            "description" => "The gateway has timed out.",
            "code" => "HTTP_GATEWAY_TIMEOUT",
        ],
        [
            "status_code" => 505,
            "name" => "HTTP Version Not Supported",
            "description" => "The server does not support the 'http protocol' version.",
            "code" => "HTTP_VERSION_NOT_SUPPORTED",
        ],
        [
            "status_code" => 506,
            "name" => "Variant Also Negotiates",
            "description" => "The Variant Also Negotiates status code indicates an internal server configuration error in which the chosen variant is itself configured to engage in content negotiation, so is not a proper negotiation endpoint.",
            "code" => "HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL",
        ],
        [
            "status_code" => 507,
            "name" => "Insufficient Storage",
            "description" => "It indicates that a method could not be performed because the server cannot store the representation needed to successfully complete the request.",
            "code" => "HTTP_INSUFFICIENT_STORAGE",
        ],
        [
            "status_code" => 508,
            "name" => "Loop Detected",
            "description" => "It indicates that the server terminated an operation because it encountered an infinite loop while processing a request with 'Depth: infinity'. This status indicates that the entire operation failed.",
            "code" => "HTTP_LOOP_DETECTED",
        ],
        [
            "status_code" => 510,
            "name" => "Not Extended",
            "description" => "In that specification a client may send a request that contains an extension declaration, that describes the extension to be used. If the server receives such a request, but any described extensions are not supported for the request, then the server responds with the 510 status code.",
            "code" => "HTTP_NOT_EXTENDED",
        ],
        [
            "status_code" => 511,
            "name" => "Network Authentication Required",
            "description" => "The HTTP 511 Network Authentication Required response status code indicates that the client needs to authenticate to gain network access.",
            "code" => "HTTP_NETWORK_AUTHENTICATION_REQUIRED",
        ],
    ]        
    ];