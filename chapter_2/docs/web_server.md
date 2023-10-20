# WEB SERVER

## The operation of a web server
![Web server](/chapter_2/img/web_server.png)

**Step 1: User sends a request**
Internet users access any website through a web browser installed on their computer or mobile device. Let's assume you enter the website address of Viettel IDC with the URL https://viettelidc.com.vn/.

**Step 2: Web browser sends a request to the Web server for processing**
At this point, the web browser you are using (Chrome, Cốc Cốc, Firefox, etc.) receives the request and converts the domain name into an IP address along with that domain name. The retrieval of this IP information goes through DNS servers. Then, the browser uses the HTTP protocol to send a request to the Web server, indicating that a user needs to access information at this address. It requests the server to return the results to the user.

**Step 3: Web server checks, returns results, and displays them to the user**
Upon receiving the request from the browser, the web server checks its system to see if there are any relevant resources associated with the requested address. If there are, it returns the information to the web browser via the HTTP protocol for display to the user. If there are no relevant resources, it will display error messages or content not found. This process is repeated accordingly.
***

## IP ADDRESS
![IP Address](/chapter_2/img/ip_address.png)

An IP address, short for Internet Protocol address, is a unique numerical label assigned to each device connected to a computer network that uses the Internet Protocol for communication. It serves two main purposes: identifying the host or network interface and providing the location of the device in the network.
IP addresses are vital for enabling communication and data transfer between devices on the internet. They can be categorized into two main types: IPv4 (Internet Protocol version 4) and IPv6 (Internet Protocol version 6).
IP addresses are essential for routing internet traffic, identifying devices on a network, and enabling communication between them. They play a crucial role in various internet protocols and services, including web browsing, email, file transfers, and more.
***

## PORT
![Port](/chapter_2/img/port.png)

A port in computer networking is how a computer can use a single physical network connection to handle many incoming and outgoing requests by assigning a port number to each. The numbers go from 0 to 65535, which is a 16-bit number.
A computer can run many software at the same time, so to make the difference, each service uses a different port for the device
2 steps to access to a service:
* IP of the computer
* PORT of the service
***

## DNS
![DNS](/chapter_2/img/DNS_Server.png)

DNS, or the Domain Name System, translates human readable domain names (for example, www.amazon.com) to machine readable IP addresses (for example, 192.0.2.44).
***

## URL
![URL](/chapter_2/img/url.png)

A URL, short for a uniform resource locator is a web address pointing to a specific website, a web page, or a document on the internet.
***

## HTTP
![HTTP](/chapter_2/img/http.png)

HTTP protocal is the  protocol used to manage requests and responses   between a client and a server
A HTTP server is a computer that can respond to HTTP requests
***

## STATIC vs. DYNAMIC SERVER
![STATIC vs. DYNAMIC SERVER](/chapter_2/img/static_and_dynamic_server.png)

A static server is a type of server that serves static files, such as HTML, CSS, JavaScript, images, and other media files, to client requests. These static files do not change dynamically and are pre-stored on the server. When a request is made, the server simply returns the stored files without any dynamic processing. Static servers are commonly used to serve static websites or unchanging resources.

A dynamic server is a server that is capable of processing dynamic requests and generating dynamic content based on user requests. Instead of simply serving static files, dynamic servers are used to generate dynamic content, such as querying databases, processing form data, handling user interactions, and creating dynamic web pages. Dynamic servers employ programming languages like PHP, Python, Ruby, or Java to process requests and generate dynamic content before sending a response to the client.

The main difference between a static server and a dynamic server lies in how they handle client requests. A static server only serves pre-stored static files without any dynamic processing. In contrast, a dynamic server has the ability to process dynamic requests and generate dynamic content based on user interactions or other factors.
***

### RESOURCES:
* [Web server là gì? Cách thức hoạt động và lưu ý khi sử dụng Web server](https://viettelidc.com.vn/tin-tuc/web-server-la-gi-cach-thuc-hoat-dong-va-luu-y-khi-su-dung-web-server)
* [IP là gì?](https://fptcloud.com/ip-la-gi/)
* [Cổng Port là gì? Có chức năng và phân loại như thế nào?](https://bkhost.vn/blog/port-la-gi/)
* [DNS là gì? Tầm quan trọng của DNS trong thế giới mạng](https://wiki.matbao.net/dns-la-gi-tam-quan-trong-cua-dns-trong-the-gioi-mang/)
* [URL là gì? Cấu trúc của URL](https://quantrimang.com/cong-nghe/url-la-gi-158090)
* [What Is a URL: Examples, Structure, and More](https://www.hostinger.com/tutorials/what-is-a-url#What_Is_the_Structure_of_a_URL)
* [HTTP là gì? Các khía cạnh cơ bản của HTTP](https://topdev.vn/blog/http-la-gi/)