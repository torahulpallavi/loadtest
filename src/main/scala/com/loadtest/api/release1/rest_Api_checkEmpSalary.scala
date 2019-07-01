package com.loadtest.api.release1
import akka.dispatch.forkjoin.ThreadLocalRandom
import io.gatling.core.scenario.Simulation
import io.gatling.core.Predef._
import io.gatling.http.Predef._

import scala.concurrent.duration._
import com.loadtest.common._
import io.gatling.core.structure.ChainBuilder

object rest_Api_checkEmpSalary {

  def rest_Api_checkEmpSalary(): ChainBuilder = {


    def getRand(i: Int) : String = ThreadLocalRandom.current.nextInt(i).toString
    def x  = "hi"+ getRand(1000)


      exec(
              http("rest_Api_checkEmpSalary")
                   .get("/EmployeeSalary")
                   .queryParam("EmployeeID",{x})
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
