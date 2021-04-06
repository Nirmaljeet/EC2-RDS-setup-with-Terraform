output "instance_id" {
    description = "Instance id of the ec2 launched"
    value = aws_instance.WordPress.id
  
}

output "public_ip" {
    description = "public ip of the instance launched"
    value = aws_instance.WordPress.public_ip
  
}


output "database_endpoint" {
    description = "endpoinnt of the rds database"
    value = aws_db_instance.DataBase.endpoint
  
}
 output "load_balancer_dns" {
   description = "DNS of load balancer"
   value = aws_elb.example.dns_name
 }