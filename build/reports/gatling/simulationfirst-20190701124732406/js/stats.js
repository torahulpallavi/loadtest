var stats = {
    type: "GROUP",
name: "Global Information",
path: "",
pathFormatted: "group_missing-name-b06d1",
stats: {
    "name": "Global Information",
    "numberOfRequests": {
        "total": "60",
        "ok": "0",
        "ko": "60"
    },
    "minResponseTime": {
        "total": "10001",
        "ok": "-",
        "ko": "10001"
    },
    "maxResponseTime": {
        "total": "10016",
        "ok": "-",
        "ko": "10016"
    },
    "meanResponseTime": {
        "total": "10005",
        "ok": "-",
        "ko": "10005"
    },
    "standardDeviation": {
        "total": "3",
        "ok": "-",
        "ko": "3"
    },
    "percentiles1": {
        "total": "10004",
        "ok": "-",
        "ko": "10004"
    },
    "percentiles2": {
        "total": "10005",
        "ok": "-",
        "ko": "10005"
    },
    "percentiles3": {
        "total": "10009",
        "ok": "-",
        "ko": "10009"
    },
    "percentiles4": {
        "total": "10014",
        "ok": "-",
        "ko": "10014"
    },
    "group1": {
        "name": "t < 800 ms",
        "count": 0,
        "percentage": 0
    },
    "group2": {
        "name": "800 ms < t < 1200 ms",
        "count": 0,
        "percentage": 0
    },
    "group3": {
        "name": "t > 1200 ms",
        "count": 0,
        "percentage": 0
    },
    "group4": {
        "name": "failed",
        "count": 60,
        "percentage": 100
    },
    "meanNumberOfRequestsPerSecond": {
        "total": "0.682",
        "ok": "-",
        "ko": "0.682"
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
        "total": "60",
        "ok": "0",
        "ko": "60"
    },
    "minResponseTime": {
        "total": "10001",
        "ok": "-",
        "ko": "10001"
    },
    "maxResponseTime": {
        "total": "10016",
        "ok": "-",
        "ko": "10016"
    },
    "meanResponseTime": {
        "total": "10005",
        "ok": "-",
        "ko": "10005"
    },
    "standardDeviation": {
        "total": "3",
        "ok": "-",
        "ko": "3"
    },
    "percentiles1": {
        "total": "10004",
        "ok": "-",
        "ko": "10004"
    },
    "percentiles2": {
        "total": "10005",
        "ok": "-",
        "ko": "10005"
    },
    "percentiles3": {
        "total": "10009",
        "ok": "-",
        "ko": "10009"
    },
    "percentiles4": {
        "total": "10014",
        "ok": "-",
        "ko": "10014"
    },
    "group1": {
        "name": "t < 800 ms",
        "count": 0,
        "percentage": 0
    },
    "group2": {
        "name": "800 ms < t < 1200 ms",
        "count": 0,
        "percentage": 0
    },
    "group3": {
        "name": "t > 1200 ms",
        "count": 0,
        "percentage": 0
    },
    "group4": {
        "name": "failed",
        "count": 60,
        "percentage": 100
    },
    "meanNumberOfRequestsPerSecond": {
        "total": "0.682",
        "ok": "-",
        "ko": "0.682"
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
