package com.loadtest.api.release1
import io.gatling.core.scenario.Simulation
import io.gatling.core.Predef._ // 2
import io.gatling.http.Predef._
import scala.concurrent.duration._
import com.loadtest.common._
import io.gatling.core.structure.ChainBuilder

object rest_Api_checkEmpSalary {

  def rest_Api_checkEmpSalary(): ChainBuilder = {

      exec(
              http("rest_Api_checkEmpSalary")
                   .get("/EmployeeSalary")
                   .queryParam("EmployeeID","3")
                   .headers(Headers.HttpHeaderBase)
                   .check(bodyString.saveAs("EmpSalaryBody"))
                   .check(
                     status.is(200)

                    )

            )

       // .exec { session =>
         // println(session)
          //println(session("EmpSalaryBody").as[String])
          //session
       // }



  }

}
