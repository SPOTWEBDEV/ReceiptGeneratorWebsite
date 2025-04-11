import { getQueryParam } from '../models/getType.js'
import { Receipt } from '../models/typeReceipt.js'


// Example usage
const { type, subtype } = getQueryParam({ type: 'type', subtype: "subtype" });


if (type != null && subtype != null) {

         const information = Receipt.filter(el => {

                  for (let i = 0; i < el.subtype.length; i++) {


                           if (el.subtype[i].id == subtype) {
                                    console.log(el.subtype[i].body);
                                    
                                    document.querySelector('#template').insertAdjacentHTML('beforeend',el.subtype[i].body)
                                    return
                                    
                           }
                  }
                  
         })

         
}
