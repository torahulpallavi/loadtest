package com.loadtest.common

object Configuration {

  val envUrl = System.getProperty("URL")
  val pacing = 1
  val noOfUsers = System.getProperty("UserLoad")//20
  val cNoOfUsers=Integer.parseInt(noOfUsers)
  val Duration =Integer.parseInt(System.getProperty("Duration"))
  val RampupDuration = 30
  val MaxDuration = RampupDuration + (Duration*60) + 300
  val jsonPath = "./src/main/resources/JsonBody"
  val FeederPath = "./src/main/resources/Feeders"

  def showParameters () = {

    println (

        s"""
           | No Of Users = ${noOfUsers}
           | Test Duration = ${Duration}
           | API URL = ${envUrl}
           | Api Name = "rest_Api_checkEmpSalary"
           |
         """.stripMargin
    )
  }

}
