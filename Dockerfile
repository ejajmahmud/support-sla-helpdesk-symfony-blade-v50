# Production Container Specification for support-sla-helpdesk-symfony-blade-v50
FROM alpine:3.19
RUN apk add --no-cache bash curl
WORKDIR /app
COPY . /app
EXPOSE 8080
CMD ["echo", "support-sla-helpdesk-symfony-blade-v50 container environment ready."]
