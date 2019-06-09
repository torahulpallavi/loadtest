var stats = {
    type: "GROUP",
name: "Global Information",
path: "",
pathFormatted: "group_missing-name-b06d1",
stats: {
    "name": "Global Information",
    "numberOfRequests": {
        "total": "1404",
        "ok": "1404",
        "ko": "0"
    },
    "minResponseTime": {
        "total": "218",
        "ok": "218",
        "ko": "-"
    },
    "maxResponseTime": {
        "total": "3179",
        "ok": "3179",
        "ko": "-"
    },
    "meanResponseTime": {
        "total": "2540",
        "ok": "2540",
        "ko": "-"
    },
    "standardDeviation": {
        "total": "814",
        "ok": "814",
        "ko": "-"
    },
    "percentiles1": {
        "total": "2968",
        "ok": "2968",
        "ko": "-"
    },
    "percentiles2": {
        "total": "3043",
        "ok": "3045",
        "ko": "-"
    },
    "percentiles3": {
        "total": "3076",
        "ok": "3076",
        "ko": "-"
    },
    "percentiles4": {
        "total": "3099",
        "ok": "3099",
        "ko": "-"
    },
    "group1": {
        "name": "t < 800 ms",
        "count": 102,
        "percentage": 7
    },
    "group2": {
        "name": "800 ms < t < 1200 ms",
        "count": 47,
        "percentage": 3
    },
    "group3": {
        "name": "t > 1200 ms",
        "count": 1255,
        "percentage": 89
    },
    "group4": {
        "name": "failed",
        "count": 0,
        "percentage": 0
    },
    "meanNumberOfRequestsPerSecond": {
        "total": "9.36",
        "ok": "9.36",
        "ko": "-"
    }
},
contents: {
"req_rest-api-checke-53ec1": {
        type: "REQUEST",
        name: "rest_Api_checkEmpSalary",
path: "rest_Api_checkEmpSalary",
pathFormatted: "req_rest-api-checke-53ec1",
stats: {
    "name": "rest_Api_checkEmpSalary",
    "numberOfRequests": {
        "total": "1404",
        "ok": "1404",
        "ko": "0"
    },
    "minResponseTime": {
        "total": "218",
        "ok": "218",
        "ko": "-"
    },
    "maxResponseTime": {
        "total": "3179",
        "ok": "3179",
        "ko": "-"
    },
    "meanResponseTime": {
        "total": "2540",
        "ok": "2540",
        "ko": "-"
    },
    "standardDeviation": {
        "total": "814",
        "ok": "814",
        "ko": "-"
    },
    "percentiles1": {
        "total": "2968",
        "ok": "2968",
        "ko": "-"
    },
    "percentiles2": {
        "total": "3045",
        "ok": "3043",
        "ko": "-"
    },
    "percentiles3": {
        "total": "3076",
        "ok": "3076",
        "ko": "-"
    },
    "percentiles4": {
        "total": "3099",
        "ok": "3099",
        "ko": "-"
    },
    "group1": {
        "name": "t < 800 ms",
        "count": 102,
        "percentage": 7
    },
    "group2": {
        "name": "800 ms < t < 1200 ms",
        "count": 47,
        "percentage": 3
    },
    "group3": {
        "name": "t > 1200 ms",
        "count": 1255,
        "percentage": 89
    },
    "group4": {
        "name": "failed",
        "count": 0,
        "percentage": 0
    },
    "meanNumberOfRequestsPerSecond": {
        "total": "9.36",
        "ok": "9.36",
        "ko": "-"
    }
}
    }
}

}

function fillStats(stat){
    $("#numberOfRequests").append(stat.numberOfRequests.total);
    $("#numberOfRequestsOK").append(stat.numberOfRequests.ok);
    $("#numberOfRequestsKO").append(stat.numberOfRequests.ko);

    $("#minResponseTime").append(stat.minResponseTime.total);
    $("#minResponseTimeOK").append(stat.minResponseTime.ok);
    $("#minResponseTimeKO").append(stat.minResponseTime.ko);

    $("#maxResponseTime").append(stat.maxResponseTime.total);
    $("#maxResponseTimeOK").append(stat.maxResponseTime.ok);
    $("#maxResponseTimeKO").append(stat.maxResponseTime.ko);

    $("#meanResponseTime").append(stat.meanResponseTime.total);
    $("#meanResponseTimeOK").append(stat.meanResponseTime.ok);
    $("#meanResponseTimeKO").append(stat.meanResponseTime.ko);

    $("#standardDeviation").append(stat.standardDeviation.total);
    $("#standardDeviationOK").append(stat.standardDeviation.ok);
    $("#standardDeviationKO").append(stat.standardDeviation.ko);

    $("#percentiles1").append(stat.percentiles1.total);
    $("#percentiles1OK").append(stat.percentiles1.ok);
    $("#percentiles1KO").append(stat.percentiles1.ko);

    $("#percentiles2").append(stat.percentiles2.total);
    $("#percentiles2OK").append(stat.percentiles2.ok);
    $("#percentiles2KO").append(stat.percentiles2.ko);

    $("#percentiles3").append(stat.percentiles3.total);
    $("#percentiles3OK").append(stat.percentiles3.ok);
    $("#percentiles3KO").append(stat.percentiles3.ko);

    $("#percentiles4").append(stat.percentiles4.total);
    $("#percentiles4OK").append(stat.percentiles4.ok);
    $("#percentiles4KO").append(stat.percentiles4.ko);

    $("#meanNumberOfRequestsPerSecond").append(stat.meanNumberOfRequestsPerSecond.total);
    $("#meanNumberOfRequestsPerSecondOK").append(stat.meanNumberOfRequestsPerSecond.ok);
    $("#meanNumberOfRequestsPerSecondKO").append(stat.meanNumberOfRequestsPerSecond.ko);
}
