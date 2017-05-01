/**
 * Created by Matias on 02/03/16.
 */

    function checkData(data){
    var lineData = [];

        for(var i = 0; i < data.length; i++){

                if (data[i][1] < 100) {

                    lineData.push([data[i][0], 150]);

                }
                
        }


    return lineData;
    }

