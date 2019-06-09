package com.loadtest.simulations
import io.gatling.core.scenario.Simulation
import io.gatling.core.Predef._ // 2
import io.gatling.http.Predef._
import scala.concurrent.duration._
import com.loadtest.common._


class SimulationFirst extends Simulation {

  /**** Setup Protocol *****
    *
    *
    */


     val httpConf = http
                        .baseUrl(Configuration.envUrl)

  /*********************************
    *
    *
    *
    *
    *
    */

    val scn = scenario("Loadtest").during(Configuration.Duration minutes)
                        {
                          Configuration.showParameters()
                         exitBlockOnFail(
                                         pace(Configuration.pacing)
                                         exec(

                                              Workload.Loadtest()

                                             )
                                        )
                          }

  /**********************************************
    *
    *
    *
    *
    *
    */

          before{

          }

  /************************************************
    *
    *
    *
    *
    *
    */

          after {

          }


  /************************************************
    *
    *
    *
    *
    *
    */


       setUp(
             scn.inject(
                         rampUsers(Configuration.cNoOfUsers) during (Configuration.RampupDuration)
                     ).protocols(httpConf)
             ).maxDuration(Configuration.MaxDuration)


    /************************************************
     *
     *
     *
     *
     *
     */

      .assertions(
                 global.responseTime.max.lt(2000)
                )

}