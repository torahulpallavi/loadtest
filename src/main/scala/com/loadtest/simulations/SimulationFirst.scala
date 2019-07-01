package com.loadtest.simulations
import akka.dispatch.forkjoin.ThreadLocalRandom
import io.gatling.core.scenario.Simulation
import io.gatling.core.Predef._
import io.gatling.http.Predef._

import scala.concurrent.duration._
import com.loadtest.common._
import io.gatling.core.feeder.Random


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

  def getRand(i: Int) : String = ThreadLocalRandom.current.nextInt(i).toString
  def x  = "hi"+ getRand(1000)

    val scn = scenario("Loadtest").during(Configuration.Duration minutes)
                        {
                          Configuration.showParameters()
                         exitBlockOnFail(
                                         pace(Configuration.pacing)
                                         exec(



                                             Workload.Loadtest()
                                               .exec { session =>
                                                 println("hello")
                                                 println(session("x").as[String])
                                                 session
                                               }

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