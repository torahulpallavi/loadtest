package com.loadtest.common
import com.loadtest.api.release1.rest_Api_checkEmpSalary
import io.gatling.core.scenario.Simulation
import io.gatling.core.Predef._
import io.gatling.http.Predef._
import io.gatling.core.structure.ChainBuilder



object  Workload {

   def Loadtest() : ChainBuilder = {

           exec(
                 rest_Api_checkEmpSalary.rest_Api_checkEmpSalary()

               )

   }

}
