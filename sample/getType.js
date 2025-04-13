export function getQueryParam({type,subtype}) {
         // Get the query string from the URL (everything after the '?')
         const queryString = window.location.search;

         // Create a URLSearchParams object from the query string
         const urlParams = new URLSearchParams(queryString);

         // Get the value of the specified parameter
         // type = urlParams.get(param)
         return {type:urlParams.get(type),subtype:urlParams.get(subtype)};
}