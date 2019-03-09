function biodata (){
    var myBiodata = {
        "name" : "M. Khairi Usman",
        "address" : "Perum. Buana Impian 2, Blok Wish E No. 07, Batam",
        "hobbies" : ['Futsal','Takraw','badminton'],
        "is_married" : false,
        "school" : { 
                    "highschool" : "SMK N 1 Muara Enim",
                    "university" : "STIKOM MUHAMMADIYAH BATAM"
                   },
        "skills" : [
                     { 
                         "bahasa" : "html",
                         "level" : "menengah"
                     },
                     { 
                        "bahasa" : "css",
                        "level" : "menengah"
                    },
                    { 
                        "bahasa" : "php",
                        "level" : "menengah"
                    },
                    { 
                        "bahasa" : "VB",
                        "level" : "menengah"
                    },
                    { 
                        "bahasa" : "python",
                        "level" : "pemula"
                    },
                    { 
                        "bahasa" : "javascript",
                        "level" : "pemula"
                    }
                   ]
    }

    console.log(myBiodata);
}

biodata();